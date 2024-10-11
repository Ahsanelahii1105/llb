{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}


{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="space-y-6 sm:space-y-8">
            @csrf

            <!-- User Type Selection -->
            <div class="w-full">
                <x-label for="user_type" value="{{ __('Are you a lawyer or a client?') }}" />
                <select id="user_type" name="user_type" class="block mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required onchange="showForm()">
                    <option value="">Select</option>
                    <option value="client">Client</option>
                    <option value="lawyer">Lawyer</option>
                </select>
            </div>

            <!-- Client Form -->
            <div id="client-form" class="space-y-6 sm:space-y-8" style="display:none;">


                <div>
                    <x-label for="client_email" value="{{ __('Client Email') }}" />
                    <x-input id="client_email" class="block mt-1 w-full rounded-lg" type="email" name="client_email" />
                </div>

                <div>
                    <x-label for="client_phone" value="{{ __('Client Phone Number') }}" />
                    <x-input id="client_phone" class="block mt-1 w-full rounded-lg" type="text" name="client_phone" />
                </div>

                <div>
                    <x-label for="relationship_status" value="{{ __('Relationship Status') }}" />
                    <select id="relationship_status" name="relationship_status" class="block mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="married">Married</option>
                        <option value="unmarried">Unmarried</option>
                    </select>
                </div>
            </div>

            <!-- Lawyer Form -->
            <div id="lawyer-form" class="space-y-6 sm:space-y-8" style="display:none;">
                <div>
                    <x-label for="lawyer_name" value="{{ __('Lawyer Name') }}" />
                    <x-input id="lawyer_name" class="block mt-1 w-full rounded-lg" type="text" name="lawyer_name" />
                </div>

                <div>
                    <x-label for="lawyer_email" value="{{ __('Lawyer Email') }}" />
                    <x-input id="lawyer_email" class="block mt-1 w-full rounded-lg" type="email" name="lawyer_email" />
                </div>

                <div>
                    <x-label for="lawyer_phone" value="{{ __('Lawyer Phone Number') }}" />
                    <x-input id="lawyer_phone" class="block mt-1 w-full rounded-lg" type="text" name="lawyer_phone" />
                </div>

                <div>
                    <x-label for="address" value="{{ __('Address') }}" />
                    <x-input id="address" class="block mt-1 w-full rounded-lg" type="text" name="address" />
                </div>

                <div>
                    <x-label for="qualification" value="{{ __('Qualification') }}" />
                    <x-input id="qualification" class="block mt-1 w-full rounded-lg" type="text" name="qualification" />
                </div>

                <div>
                    <x-label for="category" value="{{ __('Category') }}" />
                    <x-input id="category" class="block mt-1 w-full rounded-lg" type="text" name="category" />
                </div>
            </div>

            <div class="flex items-center justify-end">
                <x-button class="w-full sm:w-auto px-4 py-2 rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

<script>
    function showForm() {
        var userType = document.getElementById('user_type').value;
        if (userType === 'client') {
            document.getElementById('client-form').style.display = 'block';
            document.getElementById('lawyer-form').style.display = 'none';
        } else if (userType === 'lawyer') {
            document.getElementById('lawyer-form').style.display = 'block';
            document.getElementById('client-form').style.display = 'none';
        } else {
            document.getElementById('client-form').style.display = 'none';
            document.getElementById('lawyer-form').style.display = 'none';
        }
    }
</script> --}}

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        width: 100%;
        max-width: 600px;
        padding: 20px;
    }

    .card {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
</style>

<div class="container">
    <div class="card">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}" class="space-y-6 sm:space-y-8">
            @csrf
            <!-- User Type Selection -->

            <div class="form-group">
                <x-label for="user_type" value="{{ __('Are you a lawyer or a client?') }}" />
                 <select id="user_type" name="user_type" class="block mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required onchange="showForm()">
                    <option value="">Select</option>
                    <option value="client">Client</option>
                    <option value="lawyer">Lawyer</option>
                </select>
            </div>

            <!-- Client Form -->
            <div id="client-form" class="form-section" style="display:none;">
                <div class="form-group">
                    <x-label for="client_name" value="{{ __('Client Name') }}" />
                    <x-input id="client_name" class="block mt-1 w-full rounded-lg" type="text" name="client_name" />
                </div>

                <div class="form-group">
                    <x-label for="client_email" value="{{ __('Client Email') }}" />
                    <x-input id="client_email" class="block mt-1 w-full rounded-lg" type="email" name="client_email" />
                </div>

                <div class="form-group">
                    <x-label for="client_phone" value="{{ __('Client Phone Number') }}" />
                    <x-input id="client_phone" class="block mt-1 w-full rounded-lg" type="text" name="client_phone" />
                </div>

                <div class="form-group">
                    <x-label for="relationship_status" value="{{ __('Relationship Status') }}" />
                    <select id="relationship_status" name="relationship_status" class="block mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="married">Married</option>
                        <option value="unmarried">Unmarried</option>
                    </select>
                </div>
            </div>

            <!-- Lawyer Form -->
            <div id="lawyer-form" class="space-y-6 sm:space-y-8" style="display:none;">
                <div class="form-group">
                    <x-label for="lawyer_name" value="{{ __('Lawyer Name') }}" />
                    <x-input id="lawyer_name" class="block mt-1 w-full rounded-lg" type="text" name="lawyer_name" />
                </div>

                <div class="form-group">
                    <x-label for="lawyer_email" value="{{ __('Lawyer Email') }}" />
                    <x-input id="lawyer_email" class="block mt-1 w-full rounded-lg" type="email" name="lawyer_email" />
                </div>

                <div class="form-group">
                    <x-label for="lawyer_phone" value="{{ __('Lawyer Phone Number') }}" />
                    <x-input id="lawyer_phone" class="block mt-1 w-full rounded-lg" type="text" name="lawyer_phone" />
                </div>

                <div class="form-group">
                    <x-label for="address" value="{{ __('Address') }}" />
                    <x-input id="address" class="block mt-1 w-full rounded-lg" type="text" name="address" />
                </div>

                <div class="form-group">
                    <x-label for="qualification" value="{{ __('Qualification') }}" />
                    <x-input id="qualification" class="block mt-1 w-full rounded-lg" type="text" name="qualification" />
                </div>

                <div class="form-group">
                    <x-label for="category" value="{{ __('Category') }}" />
                    <x-input id="category" class="block mt-1 w-full rounded-lg" type="text" name="category" />
                </div>
            </div>

            <div class="flex items-center justify-end">
                <x-button class="w-full sm:w-auto px-4 py-2 rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>
</div>

<script>
    function showForm() {
        var userType = document.getElementById('user_type').value;
        if (userType === 'client') {
            document.getElementById('client-form').style.display = 'block';
            document.getElementById('lawyer-form').style.display = 'none';
        } else if (userType === 'lawyer') {
            document.getElementById('lawyer-form').style.display = 'block';
            document.getElementById('client-form').style.display = 'none';
        } else {
            document.getElementById('client-form').style.display = 'none';
            document.getElementById('lawyer-form').style.display = 'none';
        }
    }
</script>
</body>

</html>
