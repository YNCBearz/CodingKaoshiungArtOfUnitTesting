namespace CKUT.Core.Services.Ch3
{
    class FileSystem
    {
        public bool IsValid(string fileName)
        {
            return fileName.EndsWith(".txt");
        }
    }
}
