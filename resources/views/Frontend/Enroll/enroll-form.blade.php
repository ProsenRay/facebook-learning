@extends('Frontend.Layouts.app')
@section('content')
    <section style="margin: 50px 0 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="">Billing Address</h3>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label required">Name</label>
                                    <div>
                                        <input type="text" name="name" class="form-control"  placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Email</label>
                                    <div>
                                        <input type="email" name="email" class="form-control"  placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Phone</label>
                                    <div>
                                        <input type="number" name="phone" class="form-control"  placeholder="Enter phone number">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="">Payment Method</h3>
                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <div class="d-flex align-items-center">
                                        <label class="form-check form-check-inline d-flex align-items-center" style="margin-right: 50px">

                                            <input class="form-check-input" type="radio"
                                                   name="radios-inline"  checked>
                                            <img src="{{asset('Frontend/assets/images/credit-card.svg')}}" alt="">
                                            <span class="form-check-label">Credit or Debit Card</span>
                                        </label>
                                        <label class="form-check form-check-inline d-flex align-items-center" style="margin-right: 50px">
                                            <input class="form-check-input" type="radio"
                                                   name="radios-inline" >
                                            <img src="{{asset('Frontend/assets/images/bkash.svg')}}" alt="">
                                            <span class="form-check-label">BKash</span>
                                        </label>
                                        <label class="form-check form-check-inline d-flex align-items-center">
                                            <input class="form-check-input" type="radio"
                                                   name="radios-inline" >
                                            <img src="{{asset('Frontend/assets/images/nagad.svg')}}" alt="">
                                            <span class="form-check-label">Nagod</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Card number</label>
                                    <div>
                                        <input type="number" name="card-number" class="form-control"  placeholder="Enter card number">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Month</label>
                                            <select class="form-control form-select">
                                                <option value="">January</option>
                                                <option value="">February</option>
                                                <option value="">March</option>
                                                <option value="">April</option>
                                                <option value="">May</option>
                                                <option value="">Jun</option>
                                                <option value="">July</option>
                                                <option value="">August</option>
                                                <option value="">September</option>
                                                <option value="">October</option>
                                                <option value="">November</option>
                                                <option value="">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Year</label>
                                            <input type="test" class="form-control" placeholder="ZIP Code">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label class="form-label">CVV Code</label>
                                            <input type="cvv-code" class="form-control" placeholder="CVV Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Name on card </label>
                                    <div>
                                        <input type="text" name="card-name" class="form-control"  placeholder="Enter card name">
                                    </div>
                                </div>
                                <label>
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Remember this card</span>
                                </label>

                            </div>
                            <div class="card-footer text-center bg-danger fs-5">
                                <button type="submit">Make a Payment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Selected Plan</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h3 class="card-title text-danger">{{$data['title']}} </h3>
                                <p class="card-subtitle">{{$data['description']}}</p>
                                <h2 class="card-title mt-2 text-danger"><i class="fa-solid fa-bangladeshi-taka-sign me-2"></i>{{$data['price']}}</h2>

                            </div>
                            <div class="mb-3">
                                <h3 class="card-header">Benefits </h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Access to slack community</li>
                                    <li class="list-group-item">Access to support team</li>
                                    <li class="list-group-item">Algorithmic bidding</li>
                                    <li class="list-group-item">Keyword and ASIN harvestingf</li>
                                </ul>

                            </div>
                            <div class="mb-3">
                                <h3 class="card-header">Features </h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Search term isolation</li>
                                    <li class="list-group-item">Total sales analytics</li>
                                    <li class="list-group-item">Best seller rank</li>
                                    <li class="list-group-item" >Placement optimization</li>
                                </ul>

                            </div>



                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
