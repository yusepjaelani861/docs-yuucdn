<div id="generate-token" class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Generate Token</h3>
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Endpoint</h3>
            </div>
            <div class="panel-body">
                <pre>https://yuucdn.org/api/v1/auth/generate</pre>
            </div>
        </div>
        <!-- END TABLE HOVER -->
        <div class="row">
            <div class="col-md-7">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Request</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Type</th>
                                    <th>Position</th>
                                    <th>#</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>email</td>
                                    <td><code>string</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Required</code></td>
                                    <td>your_email@domain.com</td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td><code>string</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Required</code></td>
                                    <td>YourPassword#123</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
            <div class="col-md-5">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Response</h3>
                    </div>
                    <div class="panel-body">
                        <pre>{
  "success": true,
  "message": "Key generated successfully.",
  "data": {
    "key": "YkZtLzZaZ2hXTEtSVUZWd1llOU5FUT09OjrsQgmO8Gr7t6BgszcuubE1",
    "note": [
      "Please save this key in a safe place, you will need it to upload files.",
      "You can generate a new key at any time by logging in to your account."
    ]
  },
  "error": {
    "error_code": "",
    "error_data": []
  },
  "pagination": []
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
</div>