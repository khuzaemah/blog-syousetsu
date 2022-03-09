@extends('layouts.main')

@section('container')    

<h1 class="mt-3">Authors</h1>

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Create New Author</a>
    
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name Author</th>
                    <th scope="col">Country</th>
                    <th scope="col">Twitter</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                <tr>
                    <td> {{$loop->iteration}} </td>
                    <td> <a href="/posts?author={{$author->slug}}" class="text-decoration-none text-dark"> {{ $author->name }} </td>
                    <td> {{$author->country}} </td>
                    <td> {{$author->twitter}} </td>
                    {{-- <td>
                        <a href="/dashboard/posts/{{$author->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/posts/{{$author->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/posts/{{$author->slug}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

    <!-- Button trigger modal 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Create New Author
        </button> -->
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg">
                        <form action="/dashboard/posts" method="POST" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control @error('author') is-invalid      
                            @enderror" id="author" name="author" required autofocus value="{{old('author')}}">
                            @error('author')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>           
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid      
                            @enderror" id="slug" name="slug" required value="{{old('slug')}}">
                            @error('slug')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>           
                            @enderror
                        </div> 
                        {{-- <div class="mb-3">
                            <label for="category" class="form-label">Country</label>
                            <select name="category_id" id="category" class="form-select">
                                @foreach ($categories as $category)
                                    @if (old('category_id') == $category->id)
                                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif          
                                @endforeach
                            </select>
                        </div>  --}}
                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" class="form-control @error('twitter') is-invalid      
                            @enderror" id="twitter" name="twitter" required autofocus value="{{old('twitter')}}">
                            @error('twitter')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>           
                            @enderror
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Create Author</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

@endsection

