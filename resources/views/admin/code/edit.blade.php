@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.code.actions.edit', ['name' => $code->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <code-form
                :action="'{{ $code->resource_url }}'"
                :data="{{ $code->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.code.actions.edit', ['name' => $code->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.code.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </code-form>

        </div>
    
</div>

@endsection