    <form action="" method="get">
        <button type="submit" style="display: none">Pesquisar</button>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-sm ">
                <thead class="thead-light">
                    <tr>
                        @foreach ($linhas[0]->getAttributes() as $key2 => $value2)
                            <th class="text-center" style="width: 100px"><input type="text" name="{{ $key2 }}" class="form-control form-control-sm"></th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($linhas[0]->getAttributes() as $key2 => $value2)
                            <th class="text-center" style="width: 100px">@lang('users.'.$key2)</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($linhas as $value)
                        <tr>
                            @foreach ($value->getAttributes() as $key2 => $value2)
                                <td class="text-center" style="width: 100px">{{ $value2 }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
    <br>

    <div class="pull-center">{{ $linhas->links() }}</div>
