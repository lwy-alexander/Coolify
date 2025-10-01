<x-navbar></x-navbar>
<x-header header="Form Input"></x-header>
<x-layout title="Home">
  <x-form-input :user="$user"></x-form-input>
  <br />
  <x-list :posts="$user->posts"></x-list>
</x-layout>
