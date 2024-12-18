<x-layout>
    <x-forms.text-heading>Log In</x-forms.text-heading>
    <x-forms.form method="Post" action="/login">
        <x-forms.input label="Your Email" name="email" type="email"  />
        <x-forms.input label="Your Passwordd" name="password" type="password" />
        <x-forms.divider />        
        <x-forms.button>LOG IN</x-forms.button>
    </x-forms.form>
</x-layout>