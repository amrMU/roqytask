<p>
	مرحبا  {{ @$help->name }} , <br>
	 لقد قمت باستلام رسالة علي موقعك الإلكتروني، يرجي مراجعة رسائل التواصل .
	
</p>
<table>
	<tr>
		<td>الاسم : </td>
		<td>{{ @$help->name }}</td>
	</tr>
	<tr>
		<td>الهاتف : </td>
		<td>{{ @$help->phone }}</td>
	</tr>
	<tr>
		<td>البريد : </td>
		<td>{{ @$help->email }}</td>
	</tr>
	<tr>
		<td>العنوان : </td>
		<td>{{ @$help->subject }}</td>
	</tr>
	<tr>
		<td>الرساله : </td>
		<td>{{ @$help->message }}</td>
	</tr>
</table>