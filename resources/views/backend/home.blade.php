@extends('layouts.backend')

@section('title', '首页')

@section('header')
    <h1>
        Home
        <small>欢迎消息</small>
    </h1>
@endsection

@section('content')
    <style>
        p {
            text-indent: 10px;
        }
    </style>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid" style="padding: 10px;">
                <h3>欢迎登录社区物业管理系统!</h3>
                <strong>简介</strong>
                <p> 本系统 是一个基于Laravel框架开发，支持markdown语法,致力于为社区管理带来更高的效率和更好的体验。</p>
                <strong>开发者信息</strong>
                <p>Name : 王怡欢</p>
                <p>Email : 602155776@qq.com</p>
                {{-- <p>博客地址 : <a href="http://moell.cn" target="_blank">Moell Blog</a></p> --}}
                {{-- <p>项目地址 : <a href="https://github.com/moell-peng/moell-blog" target="_blank">Github</a></p> --}}

                <strong>主要依赖的开源程序</strong>
                <ul>
                    <li>LAMP</li>
                    <li>
                        <a href="https://laravel.com/" target="_blank">Laravel</a>
                    </li>
                    <li>
                        <a href="https://www.almsaeedstudio.com" target="_blank">
                            AdminLTE主题
                        </a>
                    </li>
                    <li>
                        <a href="http://getbootstrap.com/" target="_blank">
                            Bootstrap前端框架
                        </a>
                    </li>
                    <li>
                        <a href="https://pandao.github.io/editor.md/examples/index.html" target="_blank">
                            Editor.md文本编辑器
                        </a>
                    </li>
                    {{-- <li>
                        <a href="https://github.com/andersao/l5-repository" target="_blank">
                            andersao/l5-repository
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/etrepat/baum" target="_blank">
                            etrepat/baum
                        </a>
                    </li> --}}
                </ul>
                <strong>关于问题反馈</strong>
                <p>
                    可以将问题发送到我的邮箱,看到后会逐一帮助解决问题，务必将问题描述清楚。
                </p>
            </div>
        </div>
    </div>
@endsection
