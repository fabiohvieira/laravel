@extends('app')

@section('content')
    <div class="row">

        @foreach ($items as $item)
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-bold">{{ $item->second_number }}</h5>
                        <span class="float-right"><span class="text-green text-bold">$</span>
                            {{ number_format($item->price, 2, '.', ',') }}</span>

                        <p class="card-text">
                            {{ $item->description1 }}
                        </p>
                        <img src="https://www.ecofabrica.com.br/wp-content/uploads/2018/09/produtos-personalizados-blog.png"
                            alt="" class="img-fluid">



                        <br><br>

                        <table class="table table-bordered table-sm" style="margin-bottom: 5px">
                            <tr>
                                <td class="text-center"><i class="fa fa-shopping-cart text-green"></i></td>
                                <td class="text-center">{{ $item->sales->sum('quantity') }} </td>
                                <td class="text-center"><i class="fa fa-truck"></i></td>
                                <td class="text-center">1230</td>
                                <td class="text-center"><i class="fa fa-industry"></i></td>
                                <td class="text-center">1230</td>
                                <td class="text-center"><i class="fa fa-tools"></i></td>
                                <td class="text-center">1230</td>
                            </tr>
                        </table>

                        <table class="table table-bordered table-sm">
                            <tr>
                                <td class="text-center"><i class="fa fa-boxes text-blue"></i></td>
                                <td class="text-center">{{ $item->locations->sum('qty_hand') }}</td>
                                <td class="text-center"><i class="fa fa-truck text-gray"></i></td>
                                <td class="text-center">1230</td>
                                <td class="text-center"><i class="fa fa-industry text-orange"></i></td>
                                <td class="text-center">1230</td>
                                <td class="text-center"><i class="fa fa-tools text-red"></i></td>
                                <td class="text-center">1230</td>
                            </tr>
                        </table>


                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="row">
        <div class="col-md-4">
            <div>{{ $items->links() }}</div>
        </div>
    </div>
    <!-- /.row -->
@endsection
