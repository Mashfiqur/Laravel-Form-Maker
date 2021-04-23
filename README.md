# Laravel Form Maker

Form maker for Laravel inspired by Laravel form builder. With the help of Form Maker views, forms can be modified and reused easily. You can pass style, values, types to the helpers.


## Features
- Style - Pass style to the helper to customize element
- Value - Pass value to the helper to get the data from the particular field
- Type - Set the type of the input field such as email, number, tel etc.
- Active - Active the desired radio button or select field.
- Required - Handle the required field of the form

## Requirements
- [PHP >= 7.0](http://php.net/)
- [Laravel 5.x|6|7|8](https://github.com/laravel/framework)


## Quick Installation
Via Composer
```bash
$ composer require mashfiqdev/form_maker
```

### For Laravel version < 5.5

If you don't use auto-discovery, add the ServiceProvider to the providers array in `config/app.php`

```php
LaravelDaily\Invoices\InvoiceServiceProvider::class,
```

## Usage
You can use this in your blade file to make your form.

### For Input Element
You have to store the style containing classes, value, type, id, name in a variable like this:

```$emaildata = [
    "ids" => ["email"],
    "classes" => ["form-control", "bg-light","my-2"],
    "type" => "email",
    "name" => "email",
    "values" => [
        "prev_value" => "mashfiqurrr@gmail.com"
    ],
    "required" => true
];
```

And include the HTML input element like this:
```<div class="form-group">
    <label for="name">Email</label>
    @include('FormElement::input', ['data' => $emaildata])
</div>
```

### For Select Element
You have to store the style containing classes, value, id, name, active field, required status in a variable like this:

```$countrydata = [
    "ids" => ["country"],
    "classes" => ["form-select", "bg-light","my-2"],
    "name" => "country",
    "values" => [
        "BD" => "Bangladesh",
        "AUS" => "Australia",
        "DU" => "Germany",
        "CN" => "Canada",       
    ],
    "active" => "DU",
    "required" => true
];
```

And include the HTML input element like this:
```<div class="form-group">
    <label for="country">Country</label>
    @include('FormElement::select', ['data' => $countrydata])
</div>
```

### For Checkbox Element
You have to store the style containing classes, value, id, name, active field, required status in a variable like this:

```$degreedata = [
    "ids" => ["degree"],
    "classes" => ["py-2", "bg-light","my-2","blockquote"],
    "name" => "degree",
    "values" => [
        "psc" => "P.S.C",
        "jsc" => "J.S.C",
        "ssc" => "S.S.C",
        "hsc" => "H.S.C",
        "bsc" => "B.S.C",
        "msc" => "M.S.C", 
    ],
    "required" => true
];
```

And include the HTML input element like this:
```<div class="form-group">
    <label for="country">Degree</label>
    @include('FormElement::checkbox', ['data' => $degreedata])
</div>
```

### For Radio Element
You have to store the style containing classes, value, id, name, active field, required status in a variable like this:

```$maritaldata = [
    "ids" => ["marital"],
    "classes" => ["form-check","form-check-inline", "bg-light","my-2","blockquote"],
    "name" => "marital",
    "values" => [
        "single" => "Single",
        "married" => "Married",
        "unmarried" => "Unmarried"
        ],
    "active" => "unmarried",
    "required" => true
];
```

And include the HTML input element like this:
```<div class="form-group">
    <label for="country">Marital Status</label><br>
    @include('FormElement::radio', ['data' => $maritaldata])
</div>
```

### So, Your final form could be like this:

```
<div class="container py-5 mt-5 card col-md-6 offset-3">
        <h1 class="text-center">Sign Up</h1>
        <form>
            <div class="form-group">
                <label for="name">Email</label>
                @include('FormElement::input', ['data' => $emaildata])
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                @include('FormElement::select', ['data' => $countrydata])
            </div>
            <div class="form-group">
                <label for="country">Degree</label>
                @include('FormElement::checkbox', ['data' => $degreedata])
            </div>
            <div class="form-group">
                <label for="country">Marital Status</label><br>
                @include('FormElement::radio', ['data' => $maritaldata])
            </div>
            


            <button type="submit" class="btn btn-primary" disabled>Submit</button>
        </form>
</div>
```


## Security

If you discover any security related issues, please email mashfiqurrr@gmail.com instead of using the issue tracker.

## Author

- [Md. Mashfiqur Rahman](https://github.com/Mashfiqur)
