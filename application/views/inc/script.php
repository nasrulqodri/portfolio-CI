<script type="text/javascript">
	$(document).ready(function(){
		$('.viewProfile').on('click', function(){
			$.ajax({
				type:'post',
				url:'http://localhost/portfolio/profile/get_data',
				dataType: 'json',
				data:{},
				success:function(res){
					let data = res[0];
					let name = data.name;
					let fullname = name.first+" "+name.last;
					let gender = data.gender;
					let date = data.dob.date;
					let age = data.dob.age;
					let phone = data.phone;
					let cell = data.cell;
					let street = data.location.street.name+" - "+data.location.street.number;
					let city = data.location.city;
					let state = data.location.state;
					let country = data.location.country;
					let postcode = data.location.postcode;
					let picture = data.picture.large;
					let latitude = data.location.coordinates.latitude
					let longitude = data.location.coordinates.longitude
					let map = "https://maps.google.com/maps?q="+latitude+", "+longitude+"&z=15&output=embed";
					console.log(data)
					$('#picture').attr('src',picture)
					$('#name').text(fullname)
					$('#gender').text(gender)
					$('#date').text(date)
					$('#age').text(age)
					$('#phone').text(phone)
					$('#cell').text(cell)
					$('#street').text(street)
					$('#city').text(city)
					$('#state').text(state)
					$('#country').text(country)
					$('#country').text(country)
					$('#postCode').text(postcode)
					$('#map iframe').attr('src', map)

					$('#container-profile').css('display', 'block')
					$('#map').css('display', 'block')
					$('#welcome').css('display', 'none')
				}
			});
		})
	});
</script>