<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Order Form</title>
        <link rel="stylesheet" href="{{asset('css/user/paymentForm.css');}}" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous"
        />
    </head>
    <body>
    <a href="{{route('user#product#detail',$bookData->id)}}" class="btn mb-2" style="background-color:#0D122C !important;color:white">Back</a>
    <h2 class="text-center">Order Form</h2>
    <div class="container d-lg-flex mt-3">
        <div class="box-1 bg-light user">
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-center mb-3">
                    <p class="fw-bold">{{$bookData->title}}</p>
                </div>
                <img src="{{ asset('storage/book_image/' . $bookData->image) }}"
                    class="d-block w-100 mb-3">
                <div class="phone-numbers" class="mt-3">
                    <p class="fw-bold text-center">Payment Methods:</p>
                    <ul class="text-center">
                        <li>KBZ Pay - <strong>09727272727</strong></li>
                        <li>CB Pay - <strong>0909727272727</strong></li>
                        <li>AYA Pay - <strong>09727272727</strong></li>
                        <li>Wave Pay - <strong>09727272727</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box-2 ms-5">
            <div class="box-inner-2" style="margin-top:30%">
                <div>
                    <p class="fw-bold">Payment Details</p>
                    <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                </div>
                <form action="{{ route('order.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="book_id" value="{{$book_id}}">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Name</p>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div>
                        <div class="mb-3">
                            <p class="dis fw-bold mb-2">Email address</p>
                            <input class="form-control" type="email" value="" name="email">
                        </div> 
                        <div class="mb-3">
                            <div class="my-3 cardname">
                                <p class="dis fw-bold mb-2">Payment Screenshot...</p>
                                <input type="file" name="photo_url" class="form-control" id="">
                            </div>
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Price</p>
                                    <p><span class="fas fa-dollar-sign"></span>{{ number_format($bookData->price, 0, '.', ',') }} mmk</p>
                                </div>
                                <button class="btn btn-primary mt-2" type="submit">Pay<span class="fas fa-dollar-sign px-1"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
