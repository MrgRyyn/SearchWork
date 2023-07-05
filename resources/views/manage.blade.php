@include('header')

<section id="manage">
    <h2>Manage Services</h2>
    <a href="/CreateService"><button class="btn"> Create new service</button></a>
    <table class="manage-table">
            <thead>
              <tr class="manage-list">
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Number of order</th>
                <th scope="col">Edit & Delete</th>
              </tr>
            </thead>
            <tbody>
            @unless($products->isEmpty())
            @foreach($products as $product)
              <tr>
                <td> {{$product->title_service}} </th>
                <td>Rp{{number_format($product->price)}} - Rp{{number_format($product->price3)}} </td>
                <td>0</td>
                <td class="edit-delete">
                    <a href="/products/{{$product->id}}/edit"><i
                        class="fa-solid fa-pen-to-square"></i>
                      Edit</a>
                    <form method="POST" action="/products/{{$product->id}}">
                          @csrf
                          @method('DELETE')
                        <button class="text-red-500 delete"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
              @else
                You dont have any service
              @endunless
            </tbody>
    </table>
</section>

<section id="manage">
    <h2>Manage Projects</h2>
    <a href="/CreateProject"><button class="btn"> Create new project</button></a>
    <table class="manage-table">
            <thead>
              <tr class="manage-list">
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Number of order</th>
                <th scope="col">Edit & Delete</th>
              </tr>
            </thead>
            <tbody>
            @unless($projects->isEmpty())
            @foreach($projects as $project)
              <tr>
                <td> {{$project->project_name}} </th>
                <td>Rp{{number_format($project->price)}} - Rp{{number_format($project->price3)}} </td>
                <td>0</td>
                <td class="edit-delete">
                    <a href="/service/{{$project->id}}/edit"><i
                        class="fa-solid fa-pen-to-square"></i>
                      Edit</a>
                      <form method="POST" action="/projects/{{$project->id}}">
                        @csrf
                        @method('DELETE')
                      <button class="text-red-500 delete"><i class="fa-solid fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
              @else
                You dont have any project
              @endunless
            </tbody>
    </table>
</section>


@include('footer')