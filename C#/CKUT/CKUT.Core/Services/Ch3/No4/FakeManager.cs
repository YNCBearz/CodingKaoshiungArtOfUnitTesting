namespace CKUT.Core.Services.Ch3.No4
{
    public class FakeManager : IFileExtensionManager
    {
        public bool IsValid(string fileName)
        {
            return true;
        }
    }
}