<script>
import {Member} from 'util.js'
var m = new Member('太郎','山田');
console.log(m.getName());

</script>

browserify scripts/ main. js scripts/ lib/ Util. js -t [ babelify --presets es 2015 ] -o scripts/ my. js