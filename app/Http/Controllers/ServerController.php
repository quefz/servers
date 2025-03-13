<?php

namespace App\Http\Controllers;

use App\Models\Server;
use App\Http\Requests\Server\ServerCreateRequest;
use App\Http\Requests\Server\ServerUpdateRequest;

class ServerController extends Controller
{
    public function index() {
        $servers = Server::all();

        return view('pages.servers.index')->with([
            'servers' => $servers,
        ]);
    }

    public function show(Server $server) {
        return view('pages.servers.show')->with([
            'server' => $server,
        ]);
    }

    public function create() {
        return view('pages.servers.create');
    }

    public function store(ServerCreateRequest $request) {
        $data = $request->validated();

        $server = Server::create($data);

        return redirect(route('servers.show', $server));
    }

    public function edit(Server $server) {
        return view('pages.servers.edit')->with([
            'server' => $server,
        ]);
    }

    public function update(ServerUpdateRequest $request, Server $server) {
        $data = $request->validated();

        $server->fill($data);
        $server->saveOrFail();

        return redirect(route('servers.show', $server));
    }

    public function destroy(Server $server) {
        $server->deleteOrFail();

        return redirect(route('servers.index'));
    }
}
