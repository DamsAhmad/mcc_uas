<div class="table-responsive">
    <table class="table table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th><strong>No</strong></th>
                <th><strong>Nama </strong></th>
                <th><strong>Agama</strong></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <th>{{ $data->id }}</th>
                    <th>{{ $data->name }}</th>
                    <th>{{ $data->religion }}</th>
                    <th></th>
                    <th></th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
