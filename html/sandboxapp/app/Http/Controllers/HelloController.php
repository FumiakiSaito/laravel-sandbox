<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknown', Request $request, Response $response) {
        $html = <<<EOF
<html>
<h1>Index</h1>
<p>これはHelloコントローラのindexアクションです</p>
<li>ID: {$id}</li>
<li>PASS: {$pass}</li>
<h3>Request</h3>
<pre>$request</pre>
<h3>Response</h3>
<pre>$response</pre>
</html>
EOF;
        $response->setContent($html);
        return $response;
    }

    public function other() {
        return <<<EOF
<html>
<h1>Index</h1>
<p>これはHelloコントローラのotherアクションです</p>

</html>
EOF;
    }

}
