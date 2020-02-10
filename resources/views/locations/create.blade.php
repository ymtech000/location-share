@extends('layouts.app')

@section('content')

    <h1>注意喚起情報の投稿</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($location, ['route' => 'locations.store','files' => true]) !!}
        
                <div class="form-group">
                     {!! Form::label('content', 'メッセージ') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                    {!! Form::file('thefile') !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('area', 'エリア') !!}
                    {!! Form::select('area', ['わからない'=>'わからない', '赤大路町'=>'赤大路町', '芥川町'=>'芥川町', '明田町'=>'明田町', 
                    '明野町'=>'明野町','朝日町'=>'朝日町', '阿武野'=>'阿武野','安満磐手町'=>'安満磐手町', '天川新町'=>'天川新町', '天川町'=>'天川町',
                    '安満北の町'=>'安満北の町','安満御所の町'=>'安満御所の町','安満新町'=>'安満新町','安満中の町'=>'安満中の町',
                    '安満西の町'=>'安満西の町', '安満東の町'=>'安満東の町','安岡寺町'=>'安岡寺町', '井尻'=>'井尻', '出灰'=>'出灰', '今城町'=>'今城町', 
                    '美しが丘'=>'美しが丘', '浦堂'=>'浦堂', '浦堂本町'=>'浦堂本町','永楽堂'=>'永楽堂', '大冠町'=>'大冠町', '大塚町'=>'大塚町',
                    '大手町'=>'大手町', '大畑町'=>'大畑町', '岡本町'=>'岡本町', '奥天神町'=>'奥天神町','梶原'=>'梶原', '梶原中村町'=>'梶原中村町',
                    '春日町'=>'春日町', '上田辺町'=>'上田辺町', '上土室'=>'上土室', '上本町'=>'上本町', '唐崎'=>'唐崎','唐崎北'=>'唐崎北', 
                    '唐崎中'=>'唐崎中', '唐崎西'=>'唐崎西', '唐崎南'=>'唐崎南','花林苑'=>'花林苑', '川久保'=>'川久保', '川添'=>'川添','河西町'=>'河西町',
                    '上牧北駅前町'=>'上牧北駅前町', '上牧町'=>'上牧町', '上牧南駅前町'=>'上牧南駅前町', '上牧山手町'=>'上牧山手町','北大樋町'=>'北大樋町',
                    '北昭和台町'=>'北昭和台町', '北園町'=>'北園町', '北柳川町'=>'北柳川町', '京口町'=>'京口町', '郡家新町'=>'郡家新町',
                    '郡家本町'=>'郡家本町', '高西町'=>'高西町', '神内'=>'神内', '黄金の里'=>'黄金の里', '古曽部町'=>'古曽部町', '寿町'=>'寿町', 
                    '紺屋町'=>'紺屋町','五領町'=>'五領町', '西面北'=>'西面北','西面中'=>'西面中', '西面南'=>'西面南', '幸町'=>'幸町', '栄町'=>'栄町',
                    '桜ヶ丘北町'=>'桜ヶ丘北町','桜ヶ丘南町'=>'桜ヶ丘南町','桜町'=>'桜町', '沢良木町'=>'沢良木町', '三箇牧'=>'三箇牧', '芝谷町'=>'芝谷町',
                    '芝生町'=>'芝生町','清水台'=>'清水台','下田部町'=>'下田部町', '庄所町'=>'庄所町', '昭和大町'=>'昭和大町', '城西町'=>'城西町',
                    '城東町'=>'城東町', '城内町'=>'城内町', '城南町'=>'城南町', '城北町'=>'城北町', '須賀町'=>'須賀町', '杉生'=>'杉生','辻子'=>'辻子',
                    '清福寺町'=>'清福寺町', '高垣町'=>'高垣町', '高槻町'=>'高槻町', '高見台'=>'高見台', '竹の内町'=>'竹の内町',
                    '田能'=>'田能', '玉川'=>'玉川','玉川新町'=>'玉川新町','大学町'=>'大学町','大蔵司'=>'大蔵司','大和'=>'大和','千代田町'=>'千代田町',
                    '塚原'=>'塚原','塚脇'=>'塚脇','月見町'=>'月見町','堤町'=>'堤町','津之江北町'=>'津之江北町','津之江町'=>'津之江町','寺谷町'=>'寺谷町',
                    '天神町'=>'天神町','天王町'=>'天王町','出丸町'=>'出丸町','桃園町'=>'桃園町','東和町'=>'東和町','殿町'=>'殿町',
                    '登美の里町'=>'登美の里町','富田丘町'=>'富田丘町','富田町'=>'富田町','道鵜町'=>'道鵜町','土橋町'=>'土橋町','中川町'=>'中川町',
                    '中畑'=>'中畑','奈佐原'=>'奈佐原','奈佐原元町'=>'奈佐原元町','成合'=>'成合','成合北の町'=>'成合北の町','成合中の町'=>'成合中の町',
                    '成合西の町'=>'成合西の町','成合東の町'=>'成合東の町','成合南の町'=>'成合南の町','南平台'=>'南平台','西大樋町'=>'西大樋町',
                    '西冠'=>'西冠','西之川原'=>'西之川原','西真上'=>'西真上','西町'=>'西町','西五百住町'=>'西五百住町','如是町'=>'如是町','二料'=>'二料',
                    '野田'=>'野田','野田東'=>'野田東','登町'=>'登町','野見町'=>'野見町','萩谷'=>'萩谷','萩谷月見台'=>'萩谷月見台','萩之庄'=>'萩之庄',
                    '白梅町'=>'白梅町','柱本'=>'柱本','柱本新町'=>'柱本新町','柱本南町'=>'柱本南町','八丁畷町'=>'八丁畷町','八丁西町'=>'八丁西町',
                    '土室町'=>'土室町','原'=>'原','番田'=>'番田','東天川'=>'東天川','東上牧'=>'東上牧','東城山町'=>'東城山町','東五百住町'=>'東五百住町',
                    '氷室町'=>'氷室町','日向町'=>'日向町','日吉台'=>'日吉台','深沢町'=>'深沢町','深沢本町'=>'深沢本町','藤の里町'=>'藤の里町',
                    '別所本町'=>'別所本町','別所新町'=>'別所新町','別所中の町'=>'別所中の町','紅茸町'=>'紅茸町','本町'=>'本町','前島'=>'前島',
                    '真上町'=>'真上町','牧田町'=>'牧田町','松川町'=>'松川町','松が丘'=>'松が丘','松原町'=>'松原町','三島江'=>'三島江','緑が丘'=>'緑が丘',
                    '緑町'=>'緑町','南芥川町'=>'南芥川町','南大樋町'=>'南大樋町','南庄所町'=>'南庄所町','南総持寺町'=>'南総持寺町','南松原町'=>'南松原町',
                    '宮が谷町'=>'宮が谷町','宮田町'=>'宮田町','宮之川町'=>'宮之川町','宮之川原元町'=>'宮之川原元町','宮野町'=>'宮野町','紫町'=>'紫町',
                    '名神町'=>'名神町','柳川町'=>'柳川町','八幡町'=>'八幡町','山手町'=>'山手町','弥生が丘町'=>'弥生が丘町','淀の原町'=>'淀の原町',
                    '霊仙寺町'=>'霊仙寺町','若松町'=>'若松町'], 'わからない') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('place', '場所') !!}
                    {!! Form::text('place', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
        </div>
    </div>
@endsection