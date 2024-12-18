<x-layout>
<x-forms.text-heading>
    CREATE NEW JOB  
</x-forms.text-heading>
<x-forms.form method="POST" action="/jobs" >
<x-forms.input label="job title" name="title" placeholder="ceo-winter"/>
<x-forms.input label="salary" name="salary" placeholder="50,000"/>
<x-forms.input label="location" name="location" placeholder="new amesterdam , winter park"/>
<x-forms.select label="your schedule is :" name="schedule">
    <option>Full Time</option>
    <option>Part Time</option>
</x-forms.select>
<x-forms.input label="url" name="url" placeholder="https://acme.com/jobs/ceo-winter"/>
<x-forms.input label="Tags" name="tags" placeholder="laracasts , video , backend"/>
<x-forms.checkbox label="feature (Costs Extra)" name="featured" placeholder="laracasts , vodeo , backend"/>
<x-forms.button>Post Your Job</x-forms.button>
</x-forms.form>
</x-layout>