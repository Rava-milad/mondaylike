@extends('pages.adminpanel')


@section('workspaces')
<button class="btn btn-primary mt-5" id="making">
    New item
</button>
@if($errors->any())
<div class="alert alert-danger mt-3">
    <ul>
        @foreach ($errors->all() as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
@elseif(session()->has('alert'))
<div class="alert alert-success mt-3">
    <ul>
        <li>{{ session()->get('alert') }}</li>
    </ul>
</div>
@endif


<div id="some"></div>
<div id="full_data" class="mt-5">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center"><b>Workspace</b></h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Work Name<img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAz0lEQVRIieWVPQ6DMAxGGbkAimHiEB0qlbEH4giMYI7SoVWlCqkXYOAAHKaqvy6NFKEGUkLVP0seIjvv2VkSBD8dirEnFoxmjZ0zMK6wIpZ2EmrPNimR2QUsBw+4zpNVoJuG56m03X+/4Nn4LkFaIHyZIGIQsfSquuaLCMxpNfze25u1WQJVXXNi6SMGDeERg7w2SAuEJnAM7rEB1sRodC1mOSeMjet9pwbjaR5O7i3QkjG4t8Al/kNwXOA/aKyCpERGLJ0HvFP1ZTv3BT4zbjTp9IMCJzVfAAAAAElFTkSuQmCC" />
                        </th>
                        <th>partners<img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABqUlEQVRIid1VLU8DQRCtIyEVFdCda5FI8DWlAmRFJRKBQBBS0ZCKisrubAkJsgaSClLND+hfIIFUkfADEIgquJ0ZBAf9uN07rgkCJnnm8mbezJvdvVzu30dR24ZCGQLyMxieguEpID8rlGFR28bKhdWFVMDIDSBLIjTdAkotU/FA00mg+T61+AwTZeRs+0rWflQ8Q+EFKE3NZFu0VDJ2HpskwLDqFQCUO09iqJDaZS1bZS1bCqkdLdvBlTtn8aK2De/oSO14M9Ty823d4b0MnAmGWRnZidnZk92EXQwc9vCjN8Ep8OYVAOSHuIDXUxZAasUENDW9fMPTbAKGp4DU+l6ypmYaP5NFKyBuUfTe+BJCQB4DyvUneBx985wiGcYEPMc0BKTWZlfyy/zNruQV2mOXkPcRjDqbXa6ePXQS5yc34cGSyNhLBpQaIE9my6JR0Jc9b3H9XlFI89Y+KS37iR0B2qNFP/k1QOootPVSXzZKfdlQaOsBUgeQXxbs0XSaNnGu1JX16IxPHDvx4QmQzguXUkgV+IoAw+rS+G5oGqXakhS/9sv8M/EBdkjhyEn5/BEAAAAASUVORK5CYII=" />
                        </th>
                        <th>date<img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAm0lEQVRIid3UTQqDMBAFYG/h6Dm6dNnD6XiZIohHcOFhalv6p/jGlUuJMX20dOBtApkPXiBR9PcjChOFbT3/LpAUdhBFu1zekTbNLVsHFKeA5UtqZx2h8e5764hiYgOjF+BbiSgGNvBmAy/2GzzZwIMLFLhzgRI3dkVXNnBhAz0ViBVnF1B94DdtVoE0t0wUXcDyLi7H494GfnNmRQDSUZEDLVoAAAAASUVORK5CYII=" />
                        </th>
                        <th>Situation<img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABE0lEQVRIie3RoUsFQRAG8AlW0ztuZ+8Fo83gH2ARixi02SxGgyCYBeHx9tsDk9GkwSwGwT/A9JrJaBOsBvF2PsNdEhQf7Lb3pZ2dhR8zK7LIvFEYFcZfz2dccuh2XORFEWA84UjBWV9zO/8EIqJIQWF0Ic0/xX+AOnxtDfVzFT6a7ICIiIc9KowauoMigIKnCqNDuikCNOC6gu8Ke6sj17ID/V267dfEkyKAQ3eoMGrkQxHAt1xxsBeFmQvczA6IiGjk5TDFtAjgI/eG3mw84Sg7UAUuK+xJYXTTbj87ICLikM77froqAviWGwr7VNhrE7iaHRAR0cj74bOPigA+8nh4c1cEaFpWDryuQ7f7J7DIz3wDjI6iWBFCA5sAAAAASUVORK5CYII=" />
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($workspace as $item)
                    <tr>

                        <td>{{ $item->group_title }}</td>
                        <td>{{ $item->numbers }}</td>
                        <td>{{ $item->date }}</td>
                        <td>
                            <form action="/admin/workspace/{{ $item->id }}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="btn btn-outline-warning">Delete</button>

                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection