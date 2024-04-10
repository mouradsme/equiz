<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Code\BulkDestroyCode;
use App\Http\Requests\Admin\Code\DestroyCode;
use App\Http\Requests\Admin\Code\IndexCode;
use App\Http\Requests\Admin\Code\StoreCode;
use App\Http\Requests\Admin\Code\UpdateCode;
use App\Models\Code;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CodesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCode $request
     * @return array|Factory|View
     */
    public function index(IndexCode $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Code::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'code'],

            // set columns to searchIn
            ['id', 'code']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.code.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.code.create');

        return view('admin.code.create');
    }


    public function bulk() {
        
        for ($i = 0; $i < 50; $i++) {
            $codeStr = \Illuminate\Support\Str::random(8);
            Code::create(array("code" => $codeStr));
        }

        return redirect('admin/codes');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCode $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCode $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Code
        $code = Code::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/codes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/codes');
    }

    /**
     * Display the specified resource.
     *
     * @param Code $code
     * @throws AuthorizationException
     * @return void
     */
    public function show(Code $code)
    {
        $this->authorize('admin.code.show', $code);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Code $code
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Code $code)
    {
        $this->authorize('admin.code.edit', $code);


        return view('admin.code.edit', [
            'code' => $code,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCode $request
     * @param Code $code
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCode $request, Code $code)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Code
        $code->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/codes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/codes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCode $request
     * @param Code $code
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCode $request, Code $code)
    {
        $code->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCode $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCode $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Code::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
