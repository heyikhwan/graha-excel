<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\CrudExample;
use App\Models\LogRequest;
use App\Models\Menu;
use App\Models\MenuGroup;
use App\Models\News;
use App\Models\Notification;
use App\Models\PermissionGroup;
use App\Models\Product;
use App\Models\User;
use App\Repositories\SettingRepository;
use App\Services\DatabaseService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends StislaController
{

    /**
     * constructor method
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        // $this->middleware('can:Log Aktivitas');
    }

    /**
     * Menampilkan halaman dashboard
     *
     * @return Response
     */
    public function index()
    {
        $user = auth()->user();

        $data = [
            'products_count'    => Product::count(),
            'news_count'    => News::count(),
            'users_count'    => User::count(),
        ];

        return view('stisla.dashboard.index', $data, [
            'user'    => $user,
        ]);
    }

    public function post(Request $request)
    {
        $request->validate([
            'file_upload' => 'required|file|max:102048',
        ]);
        $link = $this->fileService->uploadFile($request->file('file_upload'), 'file_upload');
        auth()->user()->update(['file_upload' => $link]);
        return redirect()->back()->with('successMessage', 'File berhasil diupload');
    }

    /**
     * home page
     *
     * @return Response
     */
    public function home()
    {
        return view('stisla.homes.index', [
            'title' => __('Selamat datang di ') . SettingRepository::applicationName(),
        ]);
    }
}
