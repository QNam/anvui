<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Recruit as RecruitModel;
use App\Model\RecruitForm as RecruitFormModel;
use App\Services\UploadService;
use Illuminate\Support\Facades\Log;

class RecruitController extends Controller
{
    //
    private $filter = [];

    function __construct() {
        $this->filter['pagination'] = 10;
    }

    public function index(Request $request) {
        $data = [];

        $recruitModel = new RecruitModel();

        $header = [
            'meta_title' => 'Chiêu mộ nhân sự cho Startup Công Nghệ với Sứ mệnh Số hoá ngành vận tải hành khách | AN VUI',
        ];

        // $this->setFilter($request->only(['title', 'pagination', 'id_view']));

        $data = $recruitModel->getRecruits(['status' => 1])->paginate($this->filter['pagination']);
        
        foreach($data as $key => &$value) {
            $value = $recruitModel->createContentFormatter($value, 'recruit.detail' ,'d/m/Y');
        }
        
        $this->setHeader($header);

        return view("recruit.index")->with(['data' => $data]);
    }


    public function detail(Request $request) {
        $data = [];
        $recruitModel = new RecruitModel();

        $filter = [
            'id' => $request->id,
        ];
        $data = $recruitModel->getRecruits($filter)->firstOrFail();
        
        $data = $recruitModel->createContentFormatter($data, 'recruit.detail' ,'d/m/Y');
        $header = [
            'meta_title' => empty($data['seo']['meta_title']) ? $data->title : $data['seo']['meta_title'],
            'meta_keyword' => $data['seo']['meta_keyword'],
            'meta_desc' => $data['seo']['meta_desc'],
            'img' => $data['img'],
        ];

        $this->setHeader($header);

        return view("recruit.details")->with([
            'data' => $data,
        ]);
    }


    public function sendCV(Request $request) {
        $validator = $request->validate([
            'name' => 'required|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'required|digits_between:8,15',
            'cv' => 'required|mimetypes:application/pdf|max:2048',
        ]);

        Log::info( json_encode($request->all()));

        $params = [
            'recruit_id' => $request->recruit_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => time(),
        ];

        $uploadService = new UploadService();
        $dataUpload = [
            'path' => 'cv',
            'name' => str_slug($params['name'], "-") . "." . $request->cv->getClientOriginalExtension(),
            'realPath' => $request->cv->getRealPath()
        ];
        $cv = $uploadService->uploadFromFile($dataUpload);
        Log::info( json_encode($cv) );
        if($cv) {
            $params['file'] = $cv;
        } else {
            $request->session()->flash('ACTION_STATUS', 'ERROR');
            $request->session()->flash('ACTION_MSG', 'Có lỗi xảy ra! Vui lòng thử  lại sau.');
            return redirect()->back();
        }
        
        $recruitFormModel = new RecruitFormModel();

        Log::info( json_encode($params) );

        try {

            $recruitFormModel->insert($params);

            $request->session()->flash('ACTION_STATUS', 'SUCCESS');
            $request->session()->flash('ACTION_MSG', 'Gửi CV thành công! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.');
            return redirect()->back();

        } catch(\Exception $e) {
            Log::error( json_encode($e->getMessage() ) );

            $request->session()->flash('ACTION_STATUS', 'ERROR');
            $request->session()->flash('ACTION_MSG', 'Có lỗi xảy ra! Vui lòng thử  lại sau.');
            return redirect()->back();
        }
    }
}
