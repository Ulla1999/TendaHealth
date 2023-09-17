@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/components/advicemodal.css') }}">
@endpush

<div id="customModal" class="modal">
    <div class="modal-content">
        <div class="close-button" id="closeModalBtn">&times;</div>
        <div class="popup-main-text">
            <h1>Get Advice</h1>
        </div>
        <div class="popup-sub-text">
            <p>Please complete the fields below and we will phone you back with accredited advice</p>
        </div>
        <form action="/submit-form" method="post" class="form-container">
            @csrf
            <div class="input-container">
                <input type="text" id="name" name="name" class="input-field" required>
                <label for="name" class="input-label">Name</label>
            </div>
            <div class="input-container">
                <input type="text" id="surname" name="surname" class="input-field" required>
                <label for="surname" class="input-label">Surname</label>
            </div>
            <div class="input-container">
                <input type="text" id="cellNumber" name="cellNumber" class="input-field" required>
                <label for="cellNumber" class="input-label">Cell Number</label>
            </div>
            <div class="input-container">
                <input type="text" id="email" name="email" class="input-field" required>
                <label for="email" class="input-label">Email</label>
            </div>

            <div class="input-container">
                <select id="productType" class="input-field" required>
                    <option value=""></option>
                    <option value="A">Medical Aid</option>
                    <option value="B">Gap Cover</option>
                    <option value="C">Short-term insurance</option>
                    <option value="D">Long-term insurance</option>
                    <option value="E">Investments</option>
                    <option value="F">Other</option>
                </select>
                <label for="productType" class="input-label">Select Product Type</label>
            </div>
            <div class="input-container" id="otherReason">
                <input type="text" style="display:none" id="other" name="other" class="input-field" required>
                <label for="other" style="display:none" id="other-label" class="input-label">Other
                    Reason</label>
            </div>
            <label class="check-container">
                <input type="checkbox" id="contactPermission" required>
                <span class="checkmark"></span>I hereby give TendaHealth permission to contact me.
            </label>
            <br><br>
            <div class="g-recaptcha" data-sitekey="6Lf-thsoAAAAAN1j5_otT-z5LiZIHg4UpIbCdEtF"></div>

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <br>
            <input type="submit" value="Send Request" id="submitButton" class="advice-submit">
        </form>
    </div>
</div>
