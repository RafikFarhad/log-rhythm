<?php

namespace Farhad\LogRhythm\Http\Controllers;

use App\Http\Controllers\Controller;
use Farhad\LogRhythm\Models\LogRhythm;
use Illuminate\Http\Request;

class LogViewerController extends Controller
{
    public function index(Request $request)
    {
        $logs = LogRhythm::query();
        $filters = $request->only([
            'level', 'level_name', 'user_ip', 'created_at'
        ]);
        foreach ($filters as $filter => $key) {
            $logs->where($filter, $key);
        }
        $logs->orderBy($request->get('order', 'created_at'), $request->get('direction', 'DES'));
        return $logs->paginate(config('logrhythm.paginate', 10))->makeHidden(['context']);
    }
}
