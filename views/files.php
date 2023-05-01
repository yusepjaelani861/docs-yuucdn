<!-- List Folders -->
<div id="list-folder" class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">List Folder</h3>
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Endpoint</h3>
            </div>
            <div class="panel-body">
                <pre>https://yuucdn.org/api/v1/folders</pre>
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
                                    <td>X-YuuCDN-Key</td>
                                    <td><code>string</code></td>
                                    <td><code>Header</code></td>
                                    <td><code>Required</code></td>
                                    <td>You can get key from generate api key first.</td>
                                </tr>
                                <tr>
                                    <td>folder_id</td>
                                    <td><code>number</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Optional</code></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td><code>number</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Optional</code></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>limit</td>
                                    <td><code>number</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Optional</code></td>
                                    <td>100</td>
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
  "message": "Folder list retrieved successfully.",
  "data": [
    {
      "id": 1,
      "name": "Folder Baru",
      "slug": "9kDkZMdSBl",
      "parent_id": null,
      "created_at": "2023-04-20T04:34:29.000000Z",
      "updated_at": "2023-04-20T04:34:29.000000Z",
      "total_files": 680,
      "total_folders": 0
    }
  ],
  "error": {
    "error_code": "",
    "error_data": []
  },
  "pagination": {
    "total": 1,
    "per_page": 10,
    "current_page": 1,
    "last_page": 1,
    "first_page_url": "http://localhost:8000/api/v1/folders?page=1",
    "last_page_url": "http://localhost:8000/api/v1/folders?page=1",
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 1
  }
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
</div>

<!-- List Files -->
<div id="list-files" class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">List Files</h3>
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Endpoint</h3>
            </div>
            <div class="panel-body">
                <pre>https://yuucdn.org/api/v1/files</pre>
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
                                    <td>X-YuuCDN-Key</td>
                                    <td><code>string</code></td>
                                    <td><code>Header</code></td>
                                    <td><code>Required</code></td>
                                    <td>You can get key from generate api key first.</td>
                                </tr>
                                <tr>
                                    <td>folder_id</td>
                                    <td><code>number</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Optional</code></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td><code>number</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Optional</code></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>limit</td>
                                    <td><code>number</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Optional</code></td>
                                    <td>100</td>
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
    "message": "File list retrieved successfully.",
    "data": [
        {
            "id": 22,
            "user_id": 1,
            "folder_id": null,
            "name": "2670892-2.jpg",
            "filename": "bb821b50aaef267540b4e143caa0d1e5c7f22a85.jpg",
            "path": "user/1/images/bb821b50aaef267540b4e143caa0d1e5c7f22a85.jpg",
            "slug": "KdVsSs",
            "size": 170583,
            "extension": "jpg",
            "mime_type": "application/x-empty",
            "original_url": "https://yuucdn.org/user/1/images/bb821b50aaef267540b4e143caa0d1e5c7f22a85.jpg",
            "views": 0,
            "created_at": "2023-04-26T13:33:06.000000Z",
            "updated_at": "2023-04-26T13:33:06.000000Z"
        }
    ],
    "error": {
        "error_code": "",
        "error_data": []
    },
    "pagination": {
        "total": 1,
        "per_page": 50,
        "current_page": 1,
        "last_page": 1,
        "first_page_url": "https://yuucdn.org/api/v1/files?page=1",
        "last_page_url": "https://yuucdn.org/api/v1/files?page=1",
        "next_page_url": null,
        "prev_page_url": null,
        "from": 1,
        "to": 1
    }
}</pre>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        </div>
    </div>
</div>

<!-- Upload Image -->
<div id="upload-file" class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Upload Image</h3>
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Endpoint</h3>
            </div>
            <div class="panel-body">
                <pre>https://yuucdn.org/api/v1/upload</pre>
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
                                    <td>X-YuuCDN-Key</td>
                                    <td><code>string</code></td>
                                    <td><code>Header</code></td>
                                    <td><code>Required</code></td>
                                    <td>You can get key from generate api key first.</td>
                                </tr>
                                <tr>
                                    <td>file</td>
                                    <td><code>file</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Required</code></td>
                                    <td>(image)</td>
                                </tr>
                                <tr>
                                    <td>folder_id</td>
                                    <td><code>number</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Optional</code></td>
                                    <td>1</td>
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
  "message": "File uploaded successfully.",
  "data": {
    "user_id": 1,
    "filename": "a8918b8de691365125a4f0b1ff6763385787c9c6.jpg",
    "name": "29.jpg",
    "path": "app/public/images/a8918b8de691365125a4f0b1ff6763385787c9c6.jpg",
    "slug": "0sSWoJ",
    "size": 415866,
    "extension": "jpg",
    "mime_type": "image/jpeg",
    "original_url": "http://localhost:8000/storage/images/a8918b8de691365125a4f0b1ff6763385787c9c6.jpg",
    "updated_at": "2023-04-20T06:14:52.000000Z",
    "created_at": "2023-04-20T06:14:52.000000Z",
    "id": 684
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

<!-- Upload URL -->
<div id="upload-url" class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">Upload URL</h3>
        <!-- TABLE HOVER -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Endpoint</h3>
            </div>
            <div class="panel-body">
                <pre>https://yuucdn.org/api/v1/upload/url</pre>
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
                                    <td>X-YuuCDN-Key</td>
                                    <td><code>string</code></td>
                                    <td><code>Header</code></td>
                                    <td><code>Required</code></td>
                                    <td>You can get key from generate api key first.</td>
                                </tr>
                                <tr>
                                    <td>url</td>
                                    <td><code>string</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Required</code></td>
                                    <td>https://img.komiku.id/uploads2/2670892-2.jpg</td>
                                </tr>
                                <tr>
                                    <td>folder_id</td>
                                    <td><code>number</code></td>
                                    <td><code>Body</code></td>
                                    <td><code>Optional</code></td>
                                    <td>1</td>
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
  "message": "File uploaded successfully.",
  "data": {
    "user_id": 1,
    "filename": "a8918b8de691365125a4f0b1ff6763385787c9c6.jpg",
    "name": "29.jpg",
    "path": "app/public/images/a8918b8de691365125a4f0b1ff6763385787c9c6.jpg",
    "slug": "0sSWoJ",
    "size": 415866,
    "extension": "jpg",
    "mime_type": "image/jpeg",
    "original_url": "http://localhost:8000/storage/images/a8918b8de691365125a4f0b1ff6763385787c9c6.jpg",
    "updated_at": "2023-04-20T06:14:52.000000Z",
    "created_at": "2023-04-20T06:14:52.000000Z",
    "id": 684
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