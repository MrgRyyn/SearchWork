@include('header')


<section id="manage">
    <h2>Manage Order</h2>
    <a href="/cart"><button class="btn"> Explore some services</button></a>
    <table class="manage-table">
            <thead>
              <tr class="manage-list">
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Order Method</th>
                <th scope="col">Order Done</th>
              </tr>
            </thead>
            <tbody>
              @unless($orders->isEmpty())
                  @foreach($orders as $product)
                      <tr>
                          <td>{{$product->title_service}}</td>
                          <td>Rp{{number_format($product->price)}}</td>
                          <td>{{$product->service_method}}</td>
                          <td class="edit-delete">
                              <form method="POST" action="/orders/{{$product->id}}">
                                  @csrf
                                  @method('DELETE')
                                  <button class="text-red-500 delete">Done</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              @else
                  <tr>
                      <td colspan="4">You didn't buy any service</td>
                  </tr>
              @endunless
          </tbody>
    </table>
</section>
@include('footer')