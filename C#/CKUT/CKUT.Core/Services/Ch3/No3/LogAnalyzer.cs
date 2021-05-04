namespace CKUT.Core.Services.Ch3.No3
{
    public class LogAnalyzer
    {
        public bool IsValidFileName(string fileName)
        {
            var fileExtensionManager = new FakeManager();
            return fileExtensionManager.IsValid(fileName);
        }
    }
}
