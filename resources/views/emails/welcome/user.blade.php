@component('mail::message')
# Member Request

### **Details**
@component('mail::table')


| Name | Email | Contact | Address |
| ----- | ---- | --------|-------- |
| Header | Title |       |         |
| Paragraph | Text |     |         |

@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
