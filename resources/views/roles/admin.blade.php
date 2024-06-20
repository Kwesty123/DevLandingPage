    @include('header');

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Successfully Register your portfolio
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('account.update') }}">
                    @csrf <!-- CSRF protection for security -->
                    @method('PUT') <!-- Method spoofing to send a PUT request -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <!-- Input field for name -->
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="modalName" name="name" value=""
                                readonly>
                        </div>

                        <!-- Input field for role -->
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select id="mySelect" class="form-control" name="role">
                                <option id="user" value="0">user</option>
                                <option id="admin" value="1">admin</option>
                                <option id="client" value="2">client</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Admin Panel</h2>
        <p id="demo">This is only available for admin accounts</p>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                    aria-controls="messages" aria-selected="false">Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                    aria-controls="settings" aria-selected="false">Client</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3>Portfolio</h3>
                <p>Register your portfolio here</p>
                <form id="myForm" method="post" action="{{ route('admin.store') }}">
                    @csrf
                    @method('post')
                    <div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input class="form-control" type="id" name="id" placeholder="id" />
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input class="form-control" type="url" name="imagelink" placeholder="imagelink" />
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                            <input class="form-control" type="text" name="appname" placeholder="appname" />
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                            <input class="form-control" type="text" name="description"
                                placeholder="description" />
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
                            <input class="form-control" type="url" name="link" placeholder="link" />
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-wrench"></i></span>
                            <select class="form-control" name="language">
                                <option value="PHP,HTML,CSS & JS(Web Based)">PHP,HTML,CSS & JS(Web Based)</option>
                                <option value="Unity(Android)">Unity(Android)</option>
                                <option value="C++,C# & Python(Raspberry Pi/Arduino)">C++,C# & Python(Raspberry
                                    Pi/Arduino)
                                </option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input class="form-control" type="date" name="created" placeholder="select date" />
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-modal-window"></i></span>
                            <select class="form-control" name="type">
                                <option value="Website">Website</option>
                                <option value="Android">Android</option>
                                <option value="System">System</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-stats"></i></span>
                            <select class="form-control" name="status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div><br>
                        <input id="submitButton" type="submit" class="btn btn-primary"
                            value="Register Application" />
                    </div>
                </form>
            </div>

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <br>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    @foreach ($useraccounts as $useraccounts)
                        <div class="col mb-4">
                            <div class="card">
                                <h5 id="namecard" class="card-header">{{ $useraccounts->name }}</h5>
                                <div class="card-body">
                                    <h5 id="typecard" class="card-title">{{ $useraccounts->type }}</h5>
                                    <p class="card-text">It is a role that manage user and clients</p>
                                    <button class="btn btn-primary modifyBtn" data-toggle="modal"
                                        data-target="#exampleModal2">Modify</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                <br>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @foreach ($clientrequest as $clientrequest)
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{$clientrequest->requestid}} : {{$clientrequest->nameofrequest}}</div>
                    <div class="card-body">
                      <h5 class="card-title">Developer: {{$clientrequest->developer}}</h5>
                      <p class="card-text">teresquall.docx</p>
                      <select name="cars" id="cars">
                        <option value="volvo">Pending</option>
                        <option value="saab">In Development</option>
                        <option value="opel">Finish</option>
                      </select>
                      <button>chat</button>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
        </div>



        <!-- Add jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Include jQuery library from CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Add Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                // Check if the session variable is set to true
                @if (session('openModal'))
                    // Trigger the modal to show
                    $('#exampleModal').modal('show');
                @endif
            });

            // Event listener for Modify buttons
            $('.modifyBtn').click(function() {
                // Get the data of the corresponding card
                var card = $(this).closest('.card');
                var name = card.find('.card-header').text();
                var type = card.find('.card-title').text();

                var role;
                if (type == "user") {
                    role = "0"
                } else if (type == "admin") {
                    role = "1"
                } else if (type == "client") {
                    role = "2"
                }

                // Populate modal with the data
                $('#modalName').text(name);
                $('#modalRole').text(type);
                $('#mySelect').val(type.toLowerCase());

                document.getElementById("modalName").value = name;
                document.getElementById("mySelect").value = role;
            });
        </script>
