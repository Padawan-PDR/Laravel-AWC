<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        //Post aqui é referente a model.
        //Jeito antigo de chamar os dados do banco.
        /*return view('posts.index')->with('posts', Post::all());*/

        //Novo jeito de chamar os dados do banco.
        return view('posts.index', ['posts' => Post::all()]);        
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        //Valida os dados a serem inseridos na instancia do BD.
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
          ]);



        /* Jeito dificultoso de fazer.
            $newPost = new Post();
            $newPost->title = $request->title;
            $newPost->content = $request->content;
            $newPost->save();
        */
        //Jeito Laravel de criar uma instancia do BD.
        Post::create($request->all());

        //Para redirecionar para a página que exibe os dados.
        return redirect(route('posts.index'));
    }

    public function show($id){
        return view('posts.show', ['post'=>Post::findOrFail($id)]);
    }

    public function edit($id){
        return view('posts.edit', ['post'=>Post::findOrFail($id)]);
    }

    public function update(Request $request, $id){
        Post::findOrFail($id)->update($request->all());

        return redirect(route('posts.show', $id));
    }
}
