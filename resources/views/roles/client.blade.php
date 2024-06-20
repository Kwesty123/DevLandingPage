@include('header');
<div class="container">
    <h2>Client Panel</h2>
    <p>Request - Request Project to Client</p>
    <p>Message - Message Admin</p>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                aria-controls="home" aria-selected="true">Request</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                aria-controls="profile" aria-selected="false">Message</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <br>
            <h3>Request Project</h3>

            <form id="myForm" method="post" action="{{ route('client.store') }}">
                @csrf
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input class="form-control" type="text" name="nameofrequest" placeholder="Name of request" />
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input class="form-control" type="url" name="docxurl" placeholder="Docx Url" />
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input class="form-control" type="text" name="developer" placeholder="Developer" />
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input class="form-control" type="text" name="status" placeholder="Status" />
                </div><br>
                <input id="submitButton" type="submit" class="btn btn-primary" value="Register Application" />
            </form>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            .
        </div>
    </div>
</div>
