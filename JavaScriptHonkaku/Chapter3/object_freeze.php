<script>
'use strict';
var pet = {
		type:  'スノーホワイトハムスター',
		name: 'キラ'
};
//Object.preventExtensions(pet); //weight- Uncaught TypeError: Cannot add property weight, object is not extensible
//Object.seal(pet); //delete- Uncaught TypeError: Cannot delete property 'type' of #<Object>
Object.freeze(pet); //Uncaught TypeError: Cannot assign to read only property 'name' of object '#<Object>'

pet.name =  "山田きら";
delete pet.type;
pet.weight = 42; 
</script>