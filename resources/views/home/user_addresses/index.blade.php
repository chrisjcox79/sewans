<div id="address" class="address tab-pane">
    <h1 class="account-title">My Address</h1>
    <hr>
    <p>
        <button class="btn address-toggle">Add a New Address</button>
    </p>

    <form id="address_form_new" class="py-4" accept-charset="UTF-8">
        @csrf
        <h4>Add a New Address</h4>

        <div class="grid">
            <div class="grid__item medium-up--one-half">
                <label for="AddressFirstNameNew">First Name</label>
                <input type="text" id="AddressFirstNameNew" name="first_name" value="">
            </div>
            <div class="grid__item medium-up--one-half">
                <label for="AddressLastNameNew">Last Name</label>
                <input type="text" id="AddressLastNameNew" name="last_name" value="">
            </div>
        </div>

        <div class="grid">
            <div class="grid__item">
                <label for="AddressCompanyNew">Company</label>
                <input type="text" id="AddressCompanyNew" name="company" value="">

                <label for="AddressAddress1New">Address1</label>
                <input type="text" id="AddressAddress1New" name="address1" value="">

                <label for="AddressAddress2New">Address2</label>
                <input type="text" id="AddressAddress2New" name="address2" value="">
            </div>
        </div>

        <div class="grid">
            <div class="grid__item medium-up--one-half">
                <label for="AddressCityNew">City</label>
                <input type="text" id="AddressCityNew" name="city" value="">
            </div>
            <div class="grid__item medium-up--one-half">
                <label for="AddressCountryNew">Country</label>
                <select id="AddressCountryNew" name="country">
                </select>
            </div>
        </div>

        <label for="AddressZipNew">Postal/Zip Code</label>
        <input type="text" id="AddressZipNew" name="zip" value="" autocapitalize="characters">

        <label for="AddressPhoneNew">Phone</label>
        <p>
            <input type="tel" id="AddressPhoneNew" name="phone" value="">
        <div class="py-2">
            <input type="checkbox" id="address_default_address_new" name="default" value="1">
            <label for="address_default_address_new">Set as default address</label>
        </div>
        </p>

        <div><input type="submit" class="btn add-address" value="Add Address">
            <button type="button" class="text-link cancel address-toggle">Cancel</button>
        </div>
    </form>

    @if ($addresses)
        @foreach ($addresses as $address)
            <div class="address mt-3">
                @if ($address->default == 1)
                    <p><strong>Default</strong></p>
                @endif
                <p>{{ $address->last_name }} {{ $address->first_name }}<br>
                    @if ($address->company)
                        <p>{{ $address->company }}</p>
                    @endif
                <p>{{ $address->address1 }}<br>{{ $address->city }}<br>{{ $address->country }}</p>

                <p class="py-1">
                    <button type="button" class="btn btn--small address-edit-toggle"
                        data-form-id="{{ $address->id }}">Edit</button>
                    <button type="button" class="btn btn--secondary btn--small address-delete"
                        data-form-id="{{ $address->id }}"
                        data-confirm-message="Are you sure you wish to delete this address?">Delete</button>
                </p>
            </div>

        @endforeach
    @else

    @endif

    <hr>
    @section('js')
        <script>
            $(function() {
                $('.add-address').on('click', function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "post",
                        url: "{{ route('assresses.store') }}",
                        data: $('#address_form_new').serialize(),
                        dataType: "JSON",
                        success: function(response) {
                            if (response.status == 422) {
                                toastr.warning(response.msg);
                                return;
                            }
                            toastr.success(response.msg);
                            $("#address_form_new")[0].reset();
                            $("#address_form_new").fadeOut('slow');
                            $("#address_form_new").after(`
                                                <div class="address mt-3">
                        ${response.data.id==1? "<p><strong>Default</strong></p>":""}
                            <p>${response.data.first_name} ${response.data.last_name} <br>
                             <p>  ${response.data.company ?response.data.company:''}</p>
                            <p>${response.data.address1}<br>${response.data.city}<br>${response.data.country}</p>
                            <p class="py-1">
                                <button type="button" class="btn btn--small address-edit-toggle"
                                    data-form-id="${response.data.id}">Edit</button>
                                <button type="button" class="btn btn--secondary btn--small address-delete"
                                    data-form-id="${response.data.id}"
                                    data-confirm-message="Are you sure you wish to delete this address?">Delete</button>
                            </p>
                        </div>
                                        `);

                        },
                        error: function(response) {

                        }

                    });

                });
                $('.address-toggle').on('click', function() {
                    $("#address_form_new").slideToggle();
                });

                $('.address-edit-toggle').on('click', function() {
                    // $(this).closest('.address').hide()
                    let $this = $(this).closest('.address');
                    let id = $(this).attr('data-form-id');
                    let form = $("#address_form_new");
                    $("#address_form_new H4").html('Edit Address');
                    $("#address_form_new .add-address").val('Update');
                    $.ajax({
                        type: "get",
                        url: `/account/addresses/${id}/edit`,
                        dataType: "json",
                        success: function(response) {
                            if (response.status == 200) {
                                $("#address_form_new #AddressPhoneNew").val(response.address
                                    .phone);
                                $("#address_form_new #AddressFirstNameNew").val(response.address
                                    .first_name);
                                $("#address_form_new #AddressLastNameNew").val(response.address
                                    .last_name);
                                $("#address_form_new #AddressAddress1New").val(response.address
                                    .address1);
                                $("#address_form_new #AddressAddress2New").val(response.address
                                    .address2);
                                $("#address_form_new #AddressZipNew").val(response.address.zip);
                                $("#address_form_new #AddressCompanyNew").val(response.address
                                    .company);
                                $("#address_form_new #AddressCityNew").val(response.address
                                    .city);
                                $("#address_form_new #AddressCountryNew").val(response.address
                                        .country) == $("#address_form_new #AddressCountryNew") ?
                                    $("#address_form_new #AddressCountryNew").attr('selected',
                                        'selected') : '';
                                $("#address_default_address_new").val() == 1 ? $(
                                        "#address_default_address_new").prop('checked', true) :
                                    $("#address_default_address_new").prop('checked', false);
                                form.appendTo($this).slideToggle();
                            } else {
                                toastr.info('Error,Pleases Try again');
                                return;
                            }
                        }
                    });

                })
                async function getCountries() {
                    const response = await fetch(`https://restcountries.eu/rest/v2/all`);
                    const responseData = await response.json();
                    responseData.forEach(function(v, i) {
                        $("#AddressCountryNew").append(`<option value="${v.name}">
                                                              ${v.name}
                                                          </option>`);;
                    })
                }
                getCountries();
            })

        </script>
    @endsection
</div>
