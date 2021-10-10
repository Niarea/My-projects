<x-app-layout>
  <div class="flex h-full container">
      <nav class="flex w-72 h-full">
        <div class="w-full flex mx-auto px-6 py-8">
          <div class="w-full h-full flex items-center justify-center text-xl border-1 border-gray-900">
            <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
          <div class="border-b">
            <div class="flex justify-between px-6 -mb-px">
              <h3 class="py-4 font-bold text-lg" style="margin-left: 50px">Menu</h3>
            </div>
          </div>
          <div class="px-6 py-6 border-b -mx-4">
            <div class="text-center">
              <a href="{{ route('association.index') }}" role="button" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded ">Section association</a>
            </div>
          </div>
          <div class="px-6 py-6 border-b -mx-4">
              <div class="text-center">
                  <a href="{{ route('members.index') }}" role="button" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Section membre</a>
              </div>
          </div>
          <div class="px-6 py-6 border-b -mx-4">
            <div class="text-center">
                <div class="text-center">
                  <a href="{{ route('association.create') }}" role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ">Créer association</a>
                </div>
            </div>
          </div>
          <div class="px-6 py-6 -mx-4">
            <div class="text-center">
              @if(DB::table('associations')->where('user_id', auth()->user()->id))
               <a href="{{ route('members.create') }}" role="button" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Ajouter membre</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </nav>

     <div class="flex-grow mx-auto sm:px-4 pt-6 pb-8">
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
      <div class="border-b px-6">
        <div class="flex justify-between -mb-px">
          <div class="flex justify-between px-6 -mb-px">
            <h3 class="text-blue-dark py-4 font-bold text-lg">Infos</h3>
          </div>
        </div>
      </div>

      <div class="hidden lg:flex">
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('associations')->where('user_id', auth()->user()->id)->count() }}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
             <span style="color:blue">Nombre d'association</span>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('members')->where('association_id', auth()->user()->id)->count() }}</span>
              <span class="text-3xl align-top"></span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
            <span style="color:blue">Nombre de membre</span>
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8">
          <div>
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('users')->count() }}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
            <span style="color:blue">Nombre d'utilisateurs au total</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<footer class="footer bg-white border-b-2 border-blue-700">
    <div class="container mx-auto px-6">
      <div class="bg-white border-t">
        <div class="container mx-auto px-4 py-4 mb-0">
          <div class="text-center">
            <div class="text-center text-blue-700 font-bold md:mr-4">&copy; 2021 by NIARE ADAMA</div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</x-app-layout>


  <!--<div class="flex-grow mx-auto sm:px-4 pt-6 pb-8">
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
      <div class="border-b px-6">
        <div class="flex justify-between -mb-px">
          <div class="flex justify-between px-6 -mb-px">
            <h3 class="text-blue-dark py-4 font-bold text-lg">Infos</h3>
          </div>
        </div>
      </div>

      <div class="hidden lg:flex">
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('associations')->where('user_id', auth()->user()->id)->count() }}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
             Nombre d'association
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8">
          <div class="border-r">
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('members')->where('association_id', Auth::user()->id)->count() }}</span>
              <span class="text-3xl align-top"></span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
              Nombre de membre
            </div>
          </div>
        </div>
        <div class="w-1/3 text-center py-8">
          <div>
            <div class="text-grey-darker mb-2">
              <span class="text-5xl">{{ DB::table('users')->count() }}</span>
            </div>
            <div class="text-sm uppercase text-grey tracking-wide">
             Nombre d'utilisateurs au total
            </div>
          </div>
        </div>
      </div>
    </div>-->

  <!-- <div class="flex flex-wrap -mx-4">
      <div class="w-full mb-6 lg:mb-0 lg:w-1/2 px-4 flex flex-col">
        <div class="flex-grow flex flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden">
          <div class="border-b">
            <div class="flex justify-between px-20 -mb-px">
              <h3 class="py-4 font-bold text-lg">Menu action</h3>
            </div>
          </div>
          <div class="px-6 py-8 border-b -mx-4">
            <div class="text-center">
              <a href="{{ route('association.index') }}" role="button" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-10 rounded ">Section association</a>
            </div>
          </div>
          <div class="px-6 py-8 border-b -mx-4">
              <div class="text-center">
                  <a href="{{ route('members.index') }}" role="button" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-10 rounded">Section membre</a>
              </div>
          </div>
          <div class="px-6 py-8 border-b -mx-4">
            <div class="text-center">
                <div class="text-center">
                  <a href="{{ route('association.create') }}" role="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-10 rounded ">Créer association</a>
                </div>
            </div>
          </div>
          <div class="px-6 py-6">
            <div class="text-center">
               <a href="{{ route('members.create') }}" role="button" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-10 rounded">Ajouter membre</a>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 px-4">
        <div class="bg-white border-t border-b sm:rounded sm:border shadow">
          <div class="border-b">
            <div class="flex justify-between px-6 -mb-px">
              <h3 class="text-blue-dark py-4 font-normal text-lg">...</h3>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> -->

