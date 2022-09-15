@extends('layouts.main')


@section('data')

<div class="section-body">
          
                <div class="card">
                  <div class="card-header">
                    <h4>Data Siswa</h4>
                  </div>
                  <div class="card-body">
                    <div class="float-left">
                      <select class="form-control selectric">
                        <option>Action For Selected</option>
                        <option>Move to Draft</option>
                        <option>Move to Pending</option>
                        <option>Delete Pemanently</option>
                      </select>
                    </div>
                    <div class="float-right">
                      <form action="/searchUser" method="GET">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                      @foreach($pegawai as $p)
                        <tr>
                          <th class="text-center pt-2">
                          </th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>NIS</th>
                          <th>Date</th>
                          <th>Email</th>


                        </tr>
                        <tr>
                          <td>
                          </td>
                          <td>{{$p->name}}
                            <div class="table-links">
                            <form action ="/hapususer/{{$p->id}}" method="POST">
                            @method('delete')
                            @csrf
                            
                              <a href="#">View</a>
                              <div class="bullet"> </div>
                              <a type="button" href="/ubah/{{$p->id}}">Edit</a>
                              <div class="bullet"> </div>
                              <button type="submit" class="btn btn-danger" style="border:none;">Delete</button>     
                             
                          </form>
                            </div>
                          </td>

                          <!-- name -->
                          <td>
                            <a href="#">{{$p->kelas}}</a>
                            
                          </td>
              
                          <td>{{$p->nis}}</td>
                          <td>{{$p->date}}</td>
                          <td>{{$p->email}}</td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        

        @endsection