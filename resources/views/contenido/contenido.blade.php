    @extends('principal')
    @section('contenido')
        <template v-if="menu==0">
             <H1>Escritorio</H1>
        </template>

        <template v-if="menu==1">
        <example-component></example-component>
          </template>

        <template v-if="menu==2">
            <h1>Contenido del menú 2</h1>
        </template>

        <template v-if="menu==3">
            <h1>Contenido de correos electronicos </h1>
        </template>

        <template v-if="menu==4">
            <h1>Contenido del menú 4</h1>
        </template>

        <template v-if="menu==5">
            <h1>Contenido del menú 5</h1>
        </template>

        <template v-if="menu==6">
            <h1>Contenido del menú 6</h1>
        </template>

        <template v-if="menu==7">
            <h1>Contenido del menú 7</h1>
        </template>

        <template v-if="menu==8">
            <h1>Contenido del menú 8</h1>
        </template>

        <template v-if="menu==9">
            <h1>Contenido del menú 9</h1>
        </template>

        <template v-if="menu==10">
            <h1>Contenido del menú 10</h1>
        </template>

        <template v-if="menu==11">
            <h1>Contenido del menú 11</h1>
        </template>

        <template v-if="menu==12">
            <h1>Contenido del menú 12</h1>
        </template>
        
    @endsection