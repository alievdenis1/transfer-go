@extends('layouts.admin')

@section('content')
    <div class="jHRPSkHspjmJmR8TqBjnQ">
        <div class="tgc-layouts-full-height-table tgc-recipients">
            <div class="tgc-layouts-full-height-table tgc-profile">
                <div class="page">
                    <div class="outer-container">
                        <div class="content">
                            <div class="tgc-details">

                                <h2>Минимальная сумма перевода</h2>
                                <form action="/admin/minsum" method="post" class="tgc-profile-details-form-minified">
                                    @csrf
                                    <div class="sender-personal-details">

                                        <div class="row">
                                            <div class="tgc-text-input-updated">
                                                    <input name='minsum' value="{{$minsum}}"/>
                                            </div>
                                            <br>
                                            <div class="button-wrapper">
                                                <button class="tgc-button large blue block-mobile" type="submit"><span
                                                        class="button-content">Сохранить</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <h2>Реквизиты</h2>
                                <form action="/admin/requisites" method="post" class="tgc-profile-details-form-minified">
                                    @csrf
                                    <div class="sender-personal-details">

                                        <div class="row">
                                            <div class="tgc-text-input-updated">

                                                @foreach($requisites as $requisite)
                                                    <label>Реквизиты для перевода ({{$requisite->countries->name}})</label>
                                                    <input type="hidden"
                                                           name="number_card[{{$requisite->id}}][country]"
                                                           value="{{$requisite->countries->id}}">
                                                    <textarea style="width: 400px; height: 200px;"
                                                              name="number_card[{{$requisite->id}}][requisite]">{{$requisite->number_card}}</textarea>
                                                @endforeach
                                            </div>
                                            <br>
                                            <div class="button-wrapper">
                                            <button class="tgc-button large blue block-mobile" type="submit"><span
                                                    class="button-content">Сохранить</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
