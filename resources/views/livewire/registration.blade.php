<div>
    Student Name: <br>
    <input type="text" wire:model="name"> <br>
    {{-- <h2>Student Name : {{ $name }}</h2> --}}
    Address: <br>
    <textarea name="" cols="30" rows="10" wire:model="address"></textarea><br>
    Gender: <br>
    <input type="radio" value="Male" wire:model="gender"> Male
    <input type="radio" value="Female" wire:model="gender"> Female <br>
    Subjects: <br>
    <input type="checkbox" value="Physics" wire:model="subjects">Physics <br>
    <input type="checkbox" value="Chemistry" wire:model="subjects">Chemistry <br>
    <input type="checkbox" value="Math" wire:model="subjects">Math <br>
    Courses: <br>
    <select wire:model="course">
        <option value="">Please Select</option>
        <option value="Computer">Computer</option>
        <option value="Electronic">Electronic</option>
        <option value="Mechanic">Mechanic</option>
    </select> 
    <br><br>
    <h3>All Informations:</h3>
    <h2>Student Name: {{ $name }}</h2>
    <h2>Student Address: {{ $address }}</h2>
    <h2>Gender: {{ $gender }}</h2>
    <h2>Subjects</h2>
    <ul>
        @foreach ($subjects as $subject)
            <li>{{ $subject }}</li>
        @endforeach
    </ul>
    <h2>Courses: {{ $course }}</h2>
</div>
