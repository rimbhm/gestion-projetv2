@extends("employee.base")
@section('content')


          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Liste des Employés</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <a href="{{ route('employee.create') }}" class="btn btn-info">Ajouter Employé</a>

                  @if ($message = Session::get('success'))
                       <div class="alert alert-success">
                         <p>{{ $message }}</p>
                       </div>
                  @endif

                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                        <th>ID </th>
                        <th> Cin </th>
                        <th>
                          Nom
               
                          Prénom
                        </th>
                        <th>
                          Tel
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Adresse
                        </th>
                        <th>
                          Rôle
                        </th>
                        <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($data as $key => $value)
                      <tr>


                      
                          <td>{{ ++$i }}</td>
                          <td>{{ $value->cin }}</td>
                          <td>{{ $value->nomEmp }} {{ $value->prénomEmp }}</td>
                          <td>{{ $value->tel }}</td>
                          <td>{{ $value->email }}</td>
                         <td>{{ $value->adresse }}</td>   
                         <td>{{ $value->role }}</td>  

                         <td>
                           <form action="{{ route('employee.destroy',$value->id) }}" method="POST">   
                               <a class="btn btn-info" href="{{ route('employee.show',$value->id) }}">Show</a>    
                               <a class="btn btn-primary" href="{{ route('employee.edit',$value->id) }}">Modif</a>   
                               @csrf
                               @method('DELETE')      
                               <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                          </td>
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {!! $data->links() !!} 

@endsection