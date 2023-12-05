@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.permissions.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-folder fa-fw" aria-hidden="true"></i>
    {{ trans('installer_messages.permissions.title') }}
@endsection

@section('container')

    <ul class="list">
        @foreach($permissions['permissions'] as $permission)
        <li class="list__item list__item--permissions {{ $permission['isSet'] ? 'success' : 'error' }}">
            @if ($permission['folder'] == '../assets/admin/images/')
                assets/admin/images/
            @elseif ($permission['folder'] == '../assets/frontend/images/')
                assets/frontend/images/
            @elseif ($permission['folder'] == '../assets/frontend/invoices/')
                assets/frontend/invoices/
            @elseif ($permission['folder'] == '../assets/frontend/ndas/')
                assets/frontend/ndas/
            @elseif ($permission['folder'] == '../assets/frontend/receipt/')
                assets/frontend/receipt/
            @elseif ($permission['folder'] == '../assets/frontend/temp/')
                assets/frontend/temp/
            @elseif ($permission['folder'] == '../assets/frontend/user-suppor-file/')
                assets/frontend/user-suppor-files/
            @elseif ($permission['folder'] == '../assets/sitemaps/')
                assets/sitemaps/
            @elseif ($permission['folder'] == '../assets/user/img/')
                assets/user/img/
            @else
                core/{{ $permission['folder'] }}
            @endif

            <span>
                <i class="fa fa-fw fa-{{ $permission['isSet'] ? 'check-circle-o' : 'exclamation-circle' }}"></i>
                {{ $permission['permission'] }}
            </span>
        </li>
        @endforeach
    </ul>

    @if ( ! isset($permissions['errors']))
        <div class="buttons">
            <a href="{{ route('LaravelInstaller::license') }}" class="button">
                Verify License
                <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    @endif

@endsection
