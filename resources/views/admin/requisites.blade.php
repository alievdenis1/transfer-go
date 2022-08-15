@extends('layouts.admin')

@section('content')
    <div class="jHRPSkHspjmJmR8TqBjnQ">
        <div class="tgc-layouts-full-height-table tgc-recipients">
            <div class="tgc-layouts-full-height-table tgc-profile">
                <div class="page">
                    <div class="outer-container">
                        <div class="content">
                            <div class="tgc-details">

                                <div class="title">Requisites</div>
                                <form action="/admin/requisites" method="post" class="tgc-profile-details-form-minified">
                                    @csrf
                                    <div class="sender-personal-details">

                                        <div class="row">
                                            <div class="tgc-text-input-updated"><label>Номер карты</label><input
                                                    name="number_card" type="text"
                                                    maxlength="255" value="{{$requisites['number_card'] }}">
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
