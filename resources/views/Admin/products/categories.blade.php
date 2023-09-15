@if($type == 'pipe')

    <option @isset($data) @if($data->category == "Galvanized Class B") selected @endif @endisset value="Galvanized Class B">Galvanized Class B</option>
    <option @isset($data) @if($data->category == "GI Seamless") selected @endif @endisset value="GI Seamless">Seamless Galvanized</option>
    <option  @isset($data) @if($data->category == "Black Steel Seamless ") selected @endif @endisset value="Black Steel Seamless ">Seamless Black Steel</option>
@else
    <option  @isset($data) @if($data->category == "130  Tees ") selected @endif @endisset value="130  Tees ">130  Tees </option>
    <option  @isset($data) @if($data->category == "130R  Tees,reducing") selected @endif @endisset value="130R  Tees,reducing">130R  Tees,reducing</option>
    <option @isset($data) @if($data->category == "290  Beaded plugs") selected @endif @endisset value="290  Beaded plugs">290  Beaded plugs</option>
    <option @isset($data) @if($data->category == "220  Part thread sockets") selected @endif @endisset value="220  Part thread sockets">220  Part thread sockets</option>
    <option @isset($data) @if($data->category == "240  Sockets.reducing") selected @endif @endisset value="240  Sockets.reducing">240  Sockets.reducing</option>
    <option @isset($data) @if($data->category == "90  Elbows") selected @endif @endisset value="90  Elbows">90  Elbows</option>
    <option @isset($data) @if($data->category == "120  45°elbows") selected @endif @endisset value="120  45°elbows">120  45°elbows</option>
    <option @isset($data) @if($data->category == " 90R  Elbows,reducing") selected @endif @endisset value=" 90R  Elbows,reducing">90R  Elbows,reducing</option>
    <option @isset($data) @if($data->category == "280  Hexagon nipples") selected @endif @endisset value="280  Hexagon nipples">280  Hexagon nipples</option>
    <option @isset($data) @if($data->category == "241  Bushings") selected @endif @endisset value="241  Bushings">241  Bushings</option>
@endif

