@extends('client.layout.master')
@section('content')
    <section
        class="relative py-64 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 group-data-[mode=dark]:bg-neutral-900 ">
        <div class="inset-0 absolute bg-[url('../images/home/img-01.html')] bg-center"></div>
    </section>
    <div class="flex align-items-center justify-center">
        <table class="table-cell">
            @foreach($data as $key => $value)

                <tr>
                        <td>{{$value->name}}</td>
                        <td>
                            <form action="{{url('notifications/test')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$value->id}}">
                                <input type="hidden" name="message" value="Dương đẹp trai 123">
                                <button class="btn btn-success btn-send" id="{{$value->id}}" type="submit">Send</button>
                            </form>
{{--
                           <button class="btn btn-success btn-send" id="{{$value->id}}" type="button">Send</button>
                        </td> --}}
                </tr>
            @endforeach
        </table>
    </div>

@endsection
@section('page-script')
   {{-- <script type="module">
       $(document).ready(function (){
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
          $(document).on('click', '.btn-send',function (e){
              console.log(e.target.id);
              $.ajax({
                  url: '{{route('notifications.sendMessage')}}',
                  method: "POST",
                  data: {
                      id: e.target.id,
                      message:"Vé đặt của bạn đã được chúng tôi xác nhận.",
                  },
                  success: function (data) {
                      console.log(data)
                  },
                  error: function (jqXHR) {
                      console.log(jqXHR);
                  }
              })
          });
       });
   </script> --}}
@endsection
