<section class="search__section">
    <label for="searchBar">let's find you a great job</label> 
    <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
            </x-forms.form>
    </section>