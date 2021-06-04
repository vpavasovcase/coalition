@extends('app')

@section('content')
    <div class="container" id="app">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add product</div>

                    <div class="card-body">

                        <form id="forma" method="POST">


                            <div class="form-group row">
                                <label for="priority" class="col-md-4 col-form-label text-md-right">Product name</label>

                                <div class="col-md-6">
                                    <input v-model="newProduct.name">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quantity" class="col-md-4 col-form-label text-md-right">Product quantity</label>

                                <div class="col-md-6">
                                    <input v-model="newProduct.quantity"
                                        autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Product price</label>

                                <div class="col-md-6">
                                    <input v-model="newProduct.price" autofocus>


                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button v-on:click="save" type="button" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>


                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Added products</div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Quantity in stock</th>
                                    <th>Price per item</th>
                                    <th>Date submitted</th>
                                    <th>Total value</th>

                                </tr>
                            </thead>

                            <tbody>

                                <tr v-for="product in products">
                                    <td>@{{ product.name }}</td>
                                    <td>@{{ product.quantity }}</td>
                                    <td>@{{ product.price }}</td>
                                    <td>@{{ product.time }}</td>
                                    <td>@{{ product.total }}</td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
