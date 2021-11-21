
@extends('pages\base')

@section('content')


@if($info = Session::get('info'))  

<div class="card">
  <div class="card-body bg-success text-light">
    {{$info}}
  </div>
</div>
    
@endif
<div class="add">
<div class="float-right">
  <a href="{{url('/investors/create')}}"  class = "btn btn-dark">
    Add New Investor
  </a>
</div>
</div>
     <h1>Investor</h1>       
        <table class="table table-striped" >
            <thead class ="table table-bordered table-striped table-dark">
                <tr class="bg-secondary" >
                    <th>Investor Name</th>
                    <th>Address</th>
                    <th>Phone </th>
                    <th>Investment </th>
                </tr>
            </thead>
            <tbody class = "table-striped table-dark">
                    <?php foreach ($investors as $i): ?> 
                     <tr>
                        <td><?= $i->name ?> </td>
                        <td><?= $i->address ?> </td>
                        <td><?= $i->phone ?> </td>
                        <td><?= $i->investment ?> </td>                        
                     </tr>               
                    <?php endforeach; ?>                   
            </tbody>
        </table>

    </div>
</body>
@endsection


