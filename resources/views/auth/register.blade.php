<x-layout>
    <x-forms.text-heading>REGISTER</x-forms.text-heading>
    <x-forms.form method="Post" action="/register">
        <x-forms.input label="Your name" name="name" />
        <x-forms.input label="Your Email" name="email" type="email"  />
        <x-forms.input label="Your Passwordd" name="password" type="password" />
        <x-forms.input label="Confirm Your Password" name="password_confirmation" type="password" />
        <x-forms.divider />
        <x-forms.input label="Employer Name" name="employer_name" />
        <x-forms.input label="Logo" name="employer_logo" type="file" />
        <x-forms.divider />
        
        <x-forms.button>SUBMIT</x-forms.button>
    </x-forms.form>
</x-layout>