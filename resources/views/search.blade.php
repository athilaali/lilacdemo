
                @foreach($searchUsers as $searchUser)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$searchUser->name}}</h5>
                            <p class="card-text">{{$searchUser->Designation->name}}</p>
                            <p class="card-text">{{$searchUser->Department->name}}</p>
                        </div>
                    </div> </br></br>
                </div>
                @endforeach
