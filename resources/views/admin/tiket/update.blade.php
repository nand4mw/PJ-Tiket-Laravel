<div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
    id="offcanvasScrollingUpdate{{ $itemData->id }}" aria-labelledby="offcanvasScrollingLabel"
    style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
    <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
        <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">
            Form Update Payment
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4">

        <form method="POST" action="/tiket/update/{{ $itemData->id }}">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label class="label">Kategori Tiket</label>
                        <div class="form-group position-relative">
                            @foreach ($enum as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category_ticket"
                                        id="category{{ $category }}" value="{{ $category }}" required>
                                    <label class="form-check-label" for="category{{ $category }}">
                                        {{ $category }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="form-group mb-4">
                        <label class="label">Harga Ticket </label>
                        <div class="form-group position-relative">
                            <input type="text" name="ticket_price" required class="form-control text-dark ps-5 h-58"
                                placeholder="Kategori Tiket">
                            <i
                                class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-success text-white mt-3">Simpan</button>
                </div>
            </div>

        </form>


    </div>
</div>
